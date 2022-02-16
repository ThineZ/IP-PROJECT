window.history.forward();
    function noBack() { window.history.forward();}

    function validateForm() {

        if( document.userForm.uid.value == "" ) {
            alert( "Please provide your username" );
            document.myForm.uid.focus() ;
            return false;
}
if( document.userForm.pwd.value == "" ) {
    alert( "Please provide your password" );
    document.myForm.pwd.focus() ;
    return false;
}
return( true );
}