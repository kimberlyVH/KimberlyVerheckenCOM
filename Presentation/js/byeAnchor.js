//script to remove the anchor # in the url

//short time out before action
setTimeout(()=>{
    //html history API to manipulate location bar
    history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
    // milliseconds delay so path can still be understood before hiding hashes
}, 5);