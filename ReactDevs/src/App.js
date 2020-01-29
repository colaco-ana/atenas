import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";
import Axios from 'axios';
// window.axios=axios;

import MainView from './views/MainView';
import RegisterView from './views/RegisterView';
import PersonalizationView from './views/PersonalizationView';
import EditPersonalizationView from './views/EditPersonalizationView';
import SearchView from './views/SearchView';
import NotFoundView from './views/NotFoundView';
import LoginView from './views/LoginView';


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

export default App;
