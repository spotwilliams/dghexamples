import React from 'react';
import PropTypes from 'prop-types';

const MyButton = ({ title, onClick }) => (
  <button onClick={onClick}>{title}</button>
);

MyButton.propTypes = {
  title: PropTypes.string.isRequired,
  onClick: PropTypes.func.isRequired
};

export default MyButton;
