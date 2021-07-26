function setLocalStorage(ckey, cvalue)
{
	if (typeof(Storage) !== "undefined") {
	    window.localStorage.setItem(ckey, cvalue);
	} else {
	    console.warn("No web storage Support.");
	}
}

function getLocalStorage(ckey)
{
	if (typeof(Storage) !== "undefined") {
	    return window.localStorage.getItem(ckey);
	} else {
	    console.warn("No web storage Support.");
	}
}

function setObjectLocalStorage(ckey, cvalue)
{
	if (typeof(Storage) !== "undefined") {
	    window.localStorage.setItem(ckey, JSON.stringify(cvalue));
	} else {
	    console.warn("No web storage Support.");
	}
}

function getObjectLocalStorage(ckey)
{
	if (typeof(Storage) !== "undefined") {
	    return JSON.parse(window.localStorage.getItem(ckey));
	} else {
	    console.warn("No web storage Support.");
	}
}

function removeLocalStorage(ckey)
{
	if (typeof(Storage) !== "undefined") {
	    window.localStorage.removeItem(ckey);
	} else {
	    console.warn("No web storage Support.");
	}
}

function clearLocalStorage()
{
	if (typeof(Storage) !== "undefined") {
	    window.localStorage.clear();
	} else {
	    console.warn("No web storage Support.");
	}
}