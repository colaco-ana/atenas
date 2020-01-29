//Main - inclui as componentes da home, meu jornal e guardados
//Inclui a componente do header e do menu de navegação
import React, { Component } from 'react'
//Exemplo para usar imagem - depois mete-se atenas no src por exmeplo
//import atenas from '../images/logo_atenas.png'
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";
import Home from './HomeView';
import Saved from '../components/Saved';
import MyNewspaper from '../components/MyNewspaper';

import { Redirect } from 'react-router-dom';
import { Nav, Tabs, Tab } from 'react-bootstrap';

export const Logout = () => {
  localStorage.clear();
  window.location.href = "/session";
}

class MainView extends Component {
  render() {
    if (localStorage.getItem('user') == null) {
      return <Redirect to='/session' />;
    }
    return (
      <Router>
        <div>
          {/* <h1>Main</h1>
            <ul>
              <li>
                <Link to="/my">O meu jornal</Link>
              </li>
              <li>
                <Link to="/news">Home </Link>
              </li>
              <li>
                <Link to="/saved">Guardados</Link>
              </li>
              <li onClick={Logout}>
                Logout
              </li>
            </ul>
            <Switch>
                <Route path="/news">
                    <Home />
                </Route>
                <Route path="/my">
                    <MyNewspaper />
                </Route>
                <Route path="/saved">
                    <Saved />
                </Route>
            </Switch> */}

<div className="a_mainview_header">
  <div className="a_mainview_logo">
    <img src={require('../images/logo_atenas.png')} />
  </div>
  <div className="a_mainview_title">
      O meu Jornal
  </div>
  <div className="a_mainview_actions">
  <img src={require('../images/search.png')} />
  <img src={require('../images/user.png')} />
  </div>
</div>

          {/* TABS BOOTSTRAP */}

          <Tabs defaultActiveKey="home" transition={false} id="noanim-tab-example" className="a-mainview">
            <Tab eventKey="meu_jornal" title="O Meu Jornal" className="a-single-tab">
             1
            </Tab>
            <Tab eventKey="home" title="Home">
              2
            </Tab>
            <Tab eventKey="guardados" title="Guardados">
              3
            </Tab>
          </Tabs>
        </div>
      </Router>
    )
  }
}

export default MainView;