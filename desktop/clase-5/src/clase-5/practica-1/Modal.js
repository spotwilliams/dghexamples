import React from 'react'
import PropTypes from 'prop-types'

const ModalHeader = ({ children, onClickClose }) => (
  <div className="modal-header">
    <h5 className="modal-title">{children}</h5>
    <button type="button" className="close" aria-label="Close" onClick={onClickClose}>
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
);

const ModalBody = ({ children }) => (
  <div className="modal-body">{children}</div>
);

const ModalFooter = ({ children }) => (
  <div className="modal-footer">{children}</div>
);

const Modal = ({ children, visible }) => (
  <div className={`modal fade ${visible ? 'show' : ''}`} tabIndex="-1" role="dialog" style={{display: 'block'}}>
    <div className="modal-dialog" role="document">
      <div className="modal-content">
        {children}
      </div>
    </div>
  </div>
);

Modal.propTypes = {
  children: PropTypes.node.isRequired,
};

Modal.defaultProps = {
};

export default Modal
export { ModalBody, ModalFooter, ModalHeader }
