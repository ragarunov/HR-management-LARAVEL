require('./bootstrap');

relocateTo = function (dest) {
    if (dest === 'add') {
        window.location = '/emp/add';
    } else if (dest === 'emp') {
        window.location = '/emp';
    } else if (dest === 'work') {
        window.location = '/work';
    } else if (dest === 'roles') {
        window.location = '/roles/';
    } else if (dest === 'contact') {
        window.location = '/contact';
    } else if (dest === 'addRole') {
        window.location = '/roles/add';
    } else if (dest === 'tree') {
        window.location = '/tree';
    } else {
        //window.location = '/';
    }
}