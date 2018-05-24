import React, { Component } from 'react';
import Card, { CardText, CardTitle } from './Card';

class MisCards extends Component {
  constructor() {
    super();
    this.state = {
    }
  }

  render() {
    return (
      <div className="container">
        <div className="row">
          <div className="col-4">
            <Card imgSource="http://www.dreadcentral.com/wp-content/uploads/2017/06/nicolas-cage.jpg">
              <CardTitle>Titulo de la card</CardTitle>
              <CardText>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolorum eius est eum ex inventore laboriosam libero maxime modi mollitia nihil odit omnis perspiciatis quasi, quibusdam rerum saepe sapiente tenetur.</CardText>
              <a href="#" className="btn btn-primary">Go somewhere</a>
            </Card>
          </div>
        </div>
      </div>
    )
  }
}

export default MisCards;
