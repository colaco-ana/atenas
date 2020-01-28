//Main - inclui as componentes da home, meu jornal e guardados
//Inclui a componente do header e do menu de navegação
import React, {Component} from 'react'
//Exemplo para usar imagem - depois mete-se atenas no src por exmeplo
//import atenas from '../images/logo_atenas.png'
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";
import Home from '../js/components/Home'
import Saved from '../js/components/Saved'
import MyNewspaper from '../js/components/MyNewspaper'

import { Redirect } from 'react-router-dom';

export const Logout =() => {
  localStorage.clear();
  window.location.href = "/session";
}

class MainView extends Component {

    render() {
      if(localStorage.getItem('user')==null) {
        return <Redirect to='/session' />;
      }
        return (
          <Router>
          <div>
            <h1>Main</h1>
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
            </Switch>
          </div>
          </Router>
        )
    }
}

export default MainView