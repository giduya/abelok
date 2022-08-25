module.exports = {
    extends: ['airbnb'],
    parserOptions: {
        ecmaVersion: 10,
        ecmaFeatures: {
            jsx: true,
        },
    },
    parser: 'babel-eslint',
    plugins: ['react', 'import', 'jsx-a11y'],
    rules: {
        'arrow-parens': ['error', 'always'],
        'import/no-extraneous-dependencies': [
            'error',
            { devDependencies: true },
        ],
        'no-console': ['error', { allow: ['info', 'warn', 'error'] }],
        'func-names': ['error', 'as-needed'],
        'no-underscore-dangle': ['error', { allow: ['_id'] }],
        semi: ['error', 'never'],
        'import/no-unresolved': ['off'],
        'no-prototype-builtins': ['off'],
        'no-param-reassign': ['off'],
        'react/jsx-filename-extension': ['off'],
        'jsx-a11y/click-events-have-key-events': ['off'],
        'jsx-a11y/no-noninteractive-element-interactions': ['off'],
        'jsx-a11y/no-static-element-interactions': ['off'],
        'jsx-a11y/anchor-is-valid': ['off'],
        'jsx-a11y/label-has-for': [
            'error',
            {
                required: {
                    some: ['nesting', 'id'],
                },
            },
        ],
    },
}
