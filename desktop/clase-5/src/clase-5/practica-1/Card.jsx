import React from 'react'
import PropTypes from 'prop-types'

const CardTitle = ({ children }) => <h5 className="card-title">{children}</h5>
const CardText = ({ children }) => <p className="card-text">{children}</p>

const Card = ({ children, imgSource }) => (
  <div className="card">
    {imgSource && <img className="card-img-top" src={imgSource} alt="Card image cap" />}
    <div className="card-body">
      {children}
    </div>
  </div>
);

Card.propTypes = {
  children: PropTypes.node.isRequired,
  imgSource: PropTypes.string,
};

Card.defaultProps = {
  imgSource: null
};

export default Card
export { CardTitle, CardText }
