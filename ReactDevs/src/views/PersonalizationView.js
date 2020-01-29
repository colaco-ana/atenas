//Personalização inicial
import React, {Component} from 'react'
import { Redirect } from 'react-router-dom';

class PersonalizationView extends Component {

    render() {
        if(localStorage.getItem('user')==null) {
            return <Redirect to='/session' />;
        }
        return (
            <div>
                <h1>Personalization</h1>
            </div>
        )
    }
}

export default PersonalizationView;