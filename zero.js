// const user = {
//   nama: "andi",
//   tempatLahir: "Jakarta",
//   data: function () {
//     return `${this.nama} ${this.tempatLahir}`;
//   },
// };

// const videoData = [
//   {
//     name: "miss scarlet",
//     present: true,
//     rooms: [
//       { kitchen: false },
//       { ballroom: false },
//       { conservaktory: false },
//       { "dining room": false },
//       { "billiard room": false },
//       { library: false },
//     ],
//   },
//   {
//     name: "mrs. white",
//     present: false,
//     rooms: [
//       { kitchen: false },
//       { ballroom: false },
//       { conservaktory: false },
//       { "dining room": false },
//       { "billiard room": false },
//       { library: false },
//     ],
//   },
//   {
//     name: "Recerent Green",
//     present: true,
//     rooms: [
//       { kitchen: false },
//       { ballroom: false },
//       { conservaktory: false },
//       { "dining room": false },
//       { "billiard room": false },
//       { library: false },
//     ],
//   },
//   {
//     name: "Rusty",
//     present: false,
//     rooms: [
//       { kitchen: false },
//       { ballroom: false },
//       { conservaktory: false },
//       { "dining room": false },
//       { "billiard room": false },
//       { library: false },
//     ],
//   },
//   {
//     name: "Colonel mustrat",
//     present: true,
//     rooms: [
//       { kitchen: false },
//       { ballroom: false },
//       { conservaktory: false },
//       { "dining room": false },
//       { "billiard room": false },
//       { library: false },
//     ],
//   },
//   {
//     name: "Profesor Plum",
//     present: true,
//     rooms: [
//       { kitchen: false },
//       { ballroom: false },
//       { conservaktory: false },
//       { "dining room": false },
//       { "billiard room": false },
//       { library: false },
//     ],
//   },
// ];

// const data = videoData.filter((item) => {
//   if (item.present === false) {
//     return item;
//   }
// });
// console.log(data);

class Employe {
  #ktp;
  constructor(name, age, gender, ktp, job) {
    this.name = name;
    this.age = age;
    this.gender = gender;
    this.#ktp = ktp;
    this.job = job;
  }

  get noKTP() {
    return this.#ktp;
  }

  set setKTP(val) {
    this.#ktp = val;
  }

  doWork() {
    return "Completed";
  }

  run() {
    return "Capek";
  }
}

//Semua data parent bisa di gunakan di childern
class Programmer extends Employe {
  constructor(name, age, gender, ktp) {
    super(name, age, gender, ktp, "IOS Developer");
    this.device = "Macbook Pro";
  }

  doWork() {
    return "Pro";
  }

  run() {
    return "Good";
  }
}

let scott = new Employe("Scot lang", 40, "male", "12333123", "progammer");
let rendy = new Programmer("Rendy", 20, "male", "12333123", "IOS Developer");

// console.log(scott);
// console.log(rendy.doWork());

module.exports = Programmer;
