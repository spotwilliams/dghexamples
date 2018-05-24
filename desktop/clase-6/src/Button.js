import React from 'react'
import styled, { injectGlobal, css } from 'styled-components'
import sourceProfileImage from './assets/img/img-profile-girl.jpg'
import bgBody from './assets/img/bg-body.png'

injectGlobal`
  body {
    background-image: url(${bgBody});
  }
`

const BaseButton = styled.button `
  ${props => props.isDefault ? css`
    background-color: #eee;
    color: #aaa;
  ` : css`
    background-color: red;
    color: white;
  `};
  border: #ddd solid 1px;
`

const Button = ({ texto }) => (
  <BaseButton isDefault={!texto}>{texto ? texto : 'El botón no tiene texto'}</BaseButton>
)

export default Button
