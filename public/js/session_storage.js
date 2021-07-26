function setSessionStorage(ckey, cvalue)
{
	if (typeof(Storage) !== "undefined") {
	    window.sessionStorage.setItem(ckey, cvalue);
	} else {
	    console.warn("No web storage Support.");
	}
}

function getSessionStorage(ckey)
{
	if (typeof(Storage) !== "undefined") {
	    return window.sessionStorage.getItem(ckey);
	} else {
	    console.warn("No web storage Support.");
	}
}

function setObjectSessionStorage(ckey, cvalue)
{
	if (typeof(Storage) !== "undefined") {
	    window.sessionStorage.setItem(ckey, JSON.stringify(cvalue));
	} else {
	    console.warn("No web storage Support.");
	}
}

function getObjectSessionStorage(ckey)
{
	if (typeof(Storage) !== "undefined") {
	    return JSON.parse(window.sessionStorage.getItem(ckey));
	} else {
	    console.warn("No web storage Support.");
	}
}

function removeSessionStorage(ckey)
{
	if (typeof(Storage) !== "undefined") {
	    window.sessionStorage.removeItem(ckey);
	} else {
	    console.warn("No web storage Support.");
	}
}

function clearSessionStorage()
{
	if (typeof(Storage) !== "undefined") {
	    window.sessionStorage.clear();
	} else {
	    console.warn("No web storage Support.");
	}
}