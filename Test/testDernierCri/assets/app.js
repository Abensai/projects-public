import React, {Component} from "react";
import ReactDOM from 'react-dom';
import NewsElement from './components/News/news';
import { BrowserRouter as Router } from 'react-router-dom';

import './styles/app.css';
import './bootstrap';

class App extends Component {
    render() {
        return (
            <Router>
                <NewsElement />
            </Router>
        );
    }
}

ReactDOM.render(<App/>, document.getElementById('root'));