import React from 'react';
import PropTypes from 'prop-types';

const MyTotal = ({ itemsCount }) => (
  itemsCount && <p>{ `${itemsCount} items en total` }</p>
);

MyTotal.propTypes = {
  itemsCount: PropTypes.number.isRequired
};

export default MyTotal;
