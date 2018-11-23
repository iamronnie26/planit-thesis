import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import Profile from "./partner/Profile";

export default class Index extends Component {
    render() {
        return (
            <BrowserRouter>
                <Switch>
                    <Route path="/partner/profile" component={Profile}/>
                </Switch>
            </BrowserRouter>
        );
    }
}

if (document.getElementById('content')) {
    ReactDOM.render(<Index />, document.getElementById('content'));
}
