import React from 'react'
import PropTypes from 'prop-types'

const ListGroup = ({ children }) => (
  <ul className="list-group">
    {React.Children.map(child => (
      <li className="list-group-item">{child}</li>
    ))}
  </ul>
);

ListGroup.propTypes = {
  children: PropTypes.node.isRequired,
};

ListGroup.defaultProps = {
};

export default ListGroup


