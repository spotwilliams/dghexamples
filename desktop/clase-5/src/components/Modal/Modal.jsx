import React from 'react';

const Modal = ({ children }) => (
  <div className="modal fade show" tabindex="-1" role="dialog" style={{display: 'block'}}>
   <div className="modal-dialog" role="document">
     <div className="modal-content">
       {children}
     </div>
   </div>
  </div>
)

export default Modal
