import React from 'react';
import PropTypes from 'prop-types';

const MyInput = ({ value, onChange, onKeyPress }) => (
    <input value={value} onChange={onChange} onKeyPress={onKeyPress} />
);

MyInput.propTypes = {
    value: PropTypes.string.isRequired,
    onChange: PropTypes.func.isRequired,
    onKeyPress: PropTypes.func.isRequired,
};

export default MyInput;
