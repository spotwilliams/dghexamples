import React, { Component } from 'react';
import './App.css';
import Modal, { ModalHeader, ModalBody, ModalFooter } from './components/Modal'

class App extends Component {
  render() {
    return (
        <Modal>
          <ModalHeader>Modal title</ModalHeader>
          <ModalBody>
            <p>Modal body text goes here.</p>
          </ModalBody>
          <ModalFooter>
            <button type="button" className="btn btn-primary">Save changes</button>
            <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
          </ModalFooter>
        </Modal>
    );
  }
}

export default App;
