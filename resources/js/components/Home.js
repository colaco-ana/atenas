import React, {Component} from 'react'
import ReactDOM from 'react-dom';
import { Redirect } from 'react-router-dom';


class Home extends Component {

    constructor(props) {
        super(props);
        this.state = {
            news: [],
            isLoaded: false    
        };
    }
    componentDidMount() {

        fetch('api/news')
            .then(res => res.json())
            .then(json => {
                this.setState({
                    isLoaded: true,
                    news: json,
                })
            });

    }
    
    render() {
        var { isLoaded, news } = this.state;
        if (!isLoaded) {
            return <div>Loading...</div>
        }
        else {
            return (
                <div>
        <p>Sou o user número {localStorage.getItem('user')}</p>
            <ul>
                {news.data.map((value) => {
                    return <li key={value.id}>{value.title}</li>
                })}
            </ul>
            </div>
            )
        }
    }
}

export default Home