import React from 'react';
import PropTypes from 'prop-types';

const MyItems = ({ items }) => (
  <ul>
    { items.map((item, i) => (
      <li key={item}>{`${i + 1} - ${item}`}</li>
    )) }
  </ul>
);

MyItems.propTypes = {
  items: PropTypes.arrayOf(PropTypes.string).isRequired,
};

export default MyItems;
