import React, {Component} from 'react';
import Button from './components/Button'

export default class App extends Component {

    handleClick = () => {
        console.log('click');
    };

    render() {
        return (
            <div>
                <h1>My React App</h1>

                <Button className="Button Button--primary" onClick={this.handleClick}>Submit 123</Button>
                <Button className="Button" onClick={this.handleClick}>Save</Button>
            </div>
        );
    }
}
