import React, {Component} from 'react'
import atenas from '../images/logo_atenas.png'
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";

class HomeView extends Component {

    render() {
        return (
            <div>
                <ul>
          <li>
            <Link to="/home">O meu jornal</Link>
          </li>
          <li>
            <Link to="/home">Homepage</Link>
          </li>
          <li>
            <Link to="/home">Guardados</Link>
          </li>
          <li>
            <Link to="/login">Login</Link>
          </li>
        </ul>

        <hr />
                Home
                <br />
                <img src={atenas} style={{ height: "100px" }} />
            </div>
        )
    }
}

export default HomeView