import React from 'react';
import PropTypes from 'prop-types';
import './Button.scss'

const Button = ({children, onClick, className}) => (
    <button
        className={className}
        type="button"
        onClick={onClick}
    >
        {children}
    </button>
);

Button.defaultProps = {
    className: 'Button',
};

Button.propTypes = {
    children: PropTypes.string,
};

export default Button;