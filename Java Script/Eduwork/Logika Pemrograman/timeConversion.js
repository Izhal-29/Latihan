function TimeConversion(time){
    let temp;

    if (typeof time != "string"){
        return "Input harus string"
    } 
  
    if (time[0] + time[1] >= 1 && time[0] + time[1] <= 11 && time[8] + time[9] == "PM" ){
        temp = parseInt(time[0] + time[1]) + 12 + time[2] + time[3] + time[4] + time[5] + time[6] + time[7]
    } else if (time[0] + time[1] >= 1 && time[0] + time[1] <= 11 && time[8] + time[9] == "AM"){
        temp = time[0] + time[1] + time[2] + time[3] + time[4] + time[5] + time[6] + time[7]
    } else if (time[0] + time[1] == 12 && time[8] + time[9] == "PM") {
        temp = 12 + time[2] + time[3] + time[4] + time[5] + time[6] + time[7]
    } else if (time[0] + time[1] >= 12 && time[8] + time[9] == "AM") {
        temp = "00" + time[2] + time[3] + time[4] + time[5] + time[6] + time[7]
    } else {
        console.log("error")
    }
    
    return temp
}

console.log(TimeConversion("07:05:45PM")) // 19:05:45
console.log(TimeConversion("02:05:45AM")) // 02:05:45
console.log(TimeConversion("12:05:45PM")) // 02:05:45
console.log(TimeConversion("12:45:00AM")) // 00:45:00
 

 