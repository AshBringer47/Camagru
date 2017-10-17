
var uploadedPartials = [];
var uploadedStyle = [];
var content = document.getElementById('content');


function connectStyle(page) {
    if (page === "index" || uploadedStyle.includes(page)) {
        return;
    }
    var link = document.createElement('link');
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = "style/"+page+"-page.css";
    console.log("UPLOAD: style/"+page+"-page.css");
    uploadedStyle.push(page);
    document.head.appendChild(link);
}

function uploadPartials(page, loadScript) {
    if (!uploadedPartials[page]) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "partials/"+page);
        xhr.responseType = "text";
        xhr.send();
        xhr.onload = function () {
            content.innerHTML = this.response;
            uploadedPartials[page] = this.response;
            console.log('UPLOAD: partials/'+page);
            connectStyle(page.substring(0, page.indexOf(".")));
            loadScript();

        };
    } else {
        content.innerHTML = uploadedPartials[page];
        loadScript();
    }
}

function togleActive(page) {
    if (page !== 'index') {
        document.getElementById('indexPage').classList.remove('active');
    }
    if (page !== 'cam') {
        document.getElementById('camPage').classList.remove('active');
    }
    if (page !== 'profile') {
        document.getElementById('profilePage').classList.remove('active');
    }
    document.getElementById(page+'Page').classList.add('active');
}


Router.config({ mode: 'hash', root: '/camagru/'});

var indexOpened = false;


Router
    .add(/index/, function() {
        if (indexOpened) {
            return;
        }
        videoFinish();
        sidebarClose();
        uploadPartials('index.htm', function() {
            openIndexPage();
            indexOpened = true;
        });
        togleActive('index');
    })
    .add(/photo\/(.*)/, function() {
        sidebarClose();
        videoFinish();
        var arg = arguments[0];
        if (!indexOpened) {
            uploadPartials('index.htm', function() {
                openIndexPage();
                indexOpened = true;
                openPhotoPage(arg);
            });
            togleActive('index');
        } else {
            openPhotoPage(arg);
        }
        connectStyle('photo');

    })
    .add(/cam/, function() {
        closePhotoPage(event, 'cam');
        sidebarClose();
        uploadPartials('cam.htm', function() {
            videoStart();
            indexOpened = false;
        });
        togleActive('cam');

    })
    .add(/profile/, function() {
        closePhotoPage(event, 'profile');
        sidebarClose();
        videoFinish();
        uploadPartials('profile.htm', function() {
            indexOpened = false;
        });
        togleActive('profile');
    })
    .listen();


Router.check(Router.getFragment());
if (Router.getFragment() === '') {
    Router.check('index');
}
