import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";
import Example, {Exemple} from './components/Example';
import LoginView from '../views/LoginView'
import HomeView from '../views/HomeView';
import 'bootstrap/dist/css/bootstrap.min.css';


class App extends Component {
    render() {
        return (
    <Router>
        <div>
            <Switch>
                <Route path="/home">
                    <HomeView />
                </Route>
                <Route path="/login">
                    <LoginView />
                </Route>
            </Switch>
        </div>
    </Router>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'));