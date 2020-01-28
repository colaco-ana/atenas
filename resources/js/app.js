import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";
import axios from 'axios';
window.axios=axios;

import 'bootstrap/dist/css/bootstrap.min.css';

import LoginView from '../views/LoginView'
import MainView from '../views/MainView';
import RegisterView from '../views/RegisterView';
import PersonalizationView from '../views/PersonalizationView';
import EditPersonalizationView from '../views/EditPersonalizationView';
import SearchView from '../views/SearchView';
import NotFoundView from '../views/NotFoundView';


class App extends Component {
    render() {
        return (
            <Router>
        <div>
            <Switch>
                <Route path="/main">
                    <MainView />
                </Route>
                <Route path="/session">
                    <LoginView />
                </Route>
                <Route path="/registo">
                    <RegisterView />
                </Route>
                <Route path="/personalization">
                    <PersonalizationView />
                </Route>
                <Route path="/edit">
                    <EditPersonalizationView />
                </Route>
                <Route path="/search">
                    <SearchView />
                </Route>
                <Route path="/saved">
                    <MainView />
                </Route>
                <Route path="/my">
                    <MainView />
                </Route>
                <Route path="/news">
                    <MainView />
                </Route>
                <Route path="*" exact={true} component={NotFoundView}/>
            </Switch>
        </div>
    </Router>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'));