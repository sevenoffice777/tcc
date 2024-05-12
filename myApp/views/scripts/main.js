function toggleClass(elementVerify, elementAlter) {
    if (elementVerify.classList.contains(elementAlter)) {
        elementVerify.classList.remove(elementAlter);
    } else {
        elementVerify.classList.add(elementAlter);
    }

}
