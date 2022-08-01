function deleteChars(words){
    let temp = ""
    if (typeof words != "string"){
        return "Inputan harus string"
    } else if (words.length <= 3) {
        return false
    } else {
        for (let i = 1; i < words.length - 1; i++){
            console.log(words[i])
            temp += words[i]
        }
    }

    return temp
}

console.log(deleteChars("Belajar javascript itu menyenangkan sekali")) //"elajar javascript itu menyenangkan sekal"
console.log(deleteChars("Eduwork")) // "duwor"
console.log(deleteChars("yo")) //false
console.log(deleteChars(12345))