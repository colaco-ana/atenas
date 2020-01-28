//Para edição dos dados do utilizador, assim como da sua personalização
import React, {Component} from 'react'
import { Redirect } from 'react-router-dom';

class EditPersonalizationView extends Component {

    render() {
        if(localStorage.getItem('user')==null) {
            return <Redirect to='/session' />;
        }
        return (
            <div>
                <h1>Edit Personalization</h1>
            </div>
        )
    }
}

export default EditPersonalizationView