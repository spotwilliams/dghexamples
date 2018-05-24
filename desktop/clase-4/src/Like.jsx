import React, { Component } from 'react'

const LikeView = ({ onClick, isLiked, clicks}) => (
  <div onClick={onClick}>
    {isLiked ? 'like!' : 'Not Like'}
    <b>{clicks}</b>
  </div>
)

class LikeViewEs extends Component {
  render() {
    const { onClick, isLiked, clicks} = this.props
    return (
     <div onClick={onClick}>
       {isLiked ? 'me gusta!' : 'Not me gusta'}
       <b>{clicks}</b>
     </div>
   )
  }
}

class Like extends Component {
  constructor(props) {
    super(props)
    this.state = {
      isLiked: props.defaultValue,
      clicks: 0
    }
  }

  componentWillUnmount() {
    console.log('Voy a desaparecer!!!')
  }

  toggleLike = () => {
    this.setState({
      isLiked: !this.state.isLiked,
      clicks: this.state.clicks + 1
    })
  }

  render() {
    const { isLiked, clicks } = this.state
    const { defaultValue } = this.props
    return (
      <LikeViewEs
       isLiked={isLiked}
       clicks={clicks}
       onClick={this.toggleLike}
     />
    )
  }
}

export default Like
