//Registo (imagem, nome, email e password)
import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import Axios from 'axios';
import { Redirect } from 'react-router-dom';

class RegisterView extends Component {
    constructor(props) {
        super(props);

        this.state={
            email: '',
            username: '',
            image: '',
            password: '',
            loggedIn: false,
        }

        this.handleChange=this.handleChange.bind(this);
        this.submit=this.submit.bind(this);
    }
    handleChange(event) {
        let name = event.target.name;
        let value = event.target.value;
        console.log('handle',name, value);
        let data = {};
        data[name] = value;

        this.setState(data);
    }
    render() {
        if (this.state.loggedIn) {
            window.location.href = "/main";
        }
        if(localStorage.getItem('user')) {
            return <Redirect to='/main' />;
        }
        return (
            <div>
                <h4>Register Form</h4>
                <form onSubmit={this.submit} >
                    <div>
                        <input type="text" name="email" value={this.state.email} placeholder="email" onChange={this.handleChange} />
                    </div>
                    <div>
                        <input type="text" name="username" value={this.state.username} placeholder="username" onChange={this.handleChange} />
                    </div>
                    <div>
                        <input type="text" name="image" value={this.state.image} placeholder="image" onChange={this.handleChange} />
                    </div>
                    <div>
                        <input type="password" name="password" value={this.state.password} placeholder="password" onChange={this.handleChange} />
                    </div>
                    <input type="submit" value="submit" />
                </form>
            </div>
        )
    }
    submit(e) {
        e.preventDefault();
        
        window.axios.post('/api/register', 
        {   email: this.state.email, 
            username: this.state.username, 
            password: this.state.password, 
            image: this.state.image
        })
        .then(response=>{
            console.log('resposta',response);
            //console.log(response.data.data.access_token);
            this.setState({loggedIn: true});
            //console.log('token', response.data.data.access_token)
            localStorage.setItem('user', response.data.user.id);
            return <Redirect to='/main' />;
        })
        .catch(error => {
            console.log('erro',error.response);
        })
        ;
    }
}

export default RegisterView;