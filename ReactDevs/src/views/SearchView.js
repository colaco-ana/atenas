//Pesquisa e depois logo se vê
import React, {Component} from 'react'
import { Redirect } from 'react-router-dom';

class SearchView extends Component {

    render() {
        if(localStorage.getItem('user')==null) {
            return <Redirect to='/session' />;
        }
        return (
            <div>
                <h1>Search</h1>
            </div>
        )
    }
}

export default SearchView;