var lengthID = 60;

function getPseudoRandomString() {
    var length = lengthID - 1;
    var base62Chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var brandResult = '';

    for (var i = 0; i < length; ++i) {
        brandResult += base62Chars[Math.floor(Math.random() * base62Chars.length)];
    }

    document.getElementById('brand-submission_id').value = brandResult;
    document.getElementById('influencer-submission_id').value = brandResult;
}
