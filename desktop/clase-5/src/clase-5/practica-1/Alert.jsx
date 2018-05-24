import React from 'react'
import PropTypes from 'prop-types'

const Alert = ({ children, type, onAny, icon }) => (
  <div
    className={`alert alert-${type}`}
    role="alert"
    onClick={onAny}
    onMouseOut={onAny}
    >
    {children}
  </div>
);

Alert.propTypes = {
  children: PropTypes.node.isRequired,
  type: PropTypes.oneOf([ 'primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark' ]).isRequired,
  onClick: PropTypes.func,
};

Alert.defaultProps = {
  type: 'primary',
  onClick: e => e,
};

export default Alert
