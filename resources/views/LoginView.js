//Login
import React, {Component} from 'react'
import axios from 'axios';
import { Redirect } from 'react-router-dom';

class LoginView extends Component {
    constructor(props) {
        super(props);

        this.state={
            email: '',
            password: '',
            loggedIn: false,
        }

        this.handleChange=this.handleChange.bind(this);
        this.submit=this.submit.bind(this);
    }
    handleChange(event) {
        let name = event.target.name;
        let value = event.target.value;
        console.log(name, value);
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
            <h4>Login Form</h4>
            <form onSubmit={this.submit}>
                <div>
                    <input type="text" name="email" value={this.state.email} placeholder="email" onChange={this.handleChange} />
                </div>
                <div>
                    <input type="password" name="password" value={this.state.password} placeholder="password"  onChange={this.handleChange} />
                </div>
                <input type="submit" value="submit" />
            </form>
        </div>
        )
    }
    submit(e) {
        e.preventDefault();
        
        window.axios.post('/api/login', {email: this.state.email, password: this.state.password})
        .then(response=>{
            console.log('mano', response);
            //console.log(response.data.data.access_token);
            
            this.setState({loggedIn: true});
            
            localStorage.setItem('user', response.data.user.id);
            //return <Redirect to='/main' />;
            //console.log('token', response.data.auth.access_token);
        })
        .catch(error => {
            console.log(error.response);
        })
        ;
    }
}

export default LoginView