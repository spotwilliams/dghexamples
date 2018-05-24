import React from 'react';
import PropTypes from 'prop-types';

const MyItems = ({ items, onClickItem }) => (
  <ul>
    { items.map((item, i) => (
      <li key={item} onClick={() => {
        onClickItem(item);
      }}>{`${i + 1} - ${item}`}</li>
    )) }
  </ul>
);

MyItems.propTypes = {
  items: PropTypes.arrayOf(PropTypes.string).isRequired,
  onClickItem: PropTypes.func.isRequired,
};

export default MyItems;
