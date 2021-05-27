export default (data)=>{
    const date = new Date(data)
    const year = date.getFullYear()
    const monht = date.getUTCMonth()
    const day = date.getDate()
    const hour = date.getHours()
    const minut = date.getMinutes()
    const second = date.getSeconds()
    return `${hour}:${minut}:${second} ${year}.${monht}.${day}`
}