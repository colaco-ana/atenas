import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Redirect } from 'react-router-dom';


class NotFoundView extends Component {
    
    render() {
        localStorage.clear();
        return (
            <div>
                Page not found!!
            </div>    
        )
        //}
    }
}


export default NotFoundView;