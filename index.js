// const Programmer = require("./zero.js");

// let child = new Programmer("Rendy", 28, "male", "129399134");
// console.log(child, child.doWork());

const potongKue = (bahan) => {
  return new Promise((resolve, reject) => {
    if (!bahan) {
      reject("maaf tidak ada kue yang di pesan");
    } else if (bahan.lenght === 1) {
      reject("kuenya cuma 1 harus banyak");
    } else {
      setTimeout(() => {
        const data = bahan.map((item) => {
          return item;
        });
        resolve(data);
      }, 3000);
    }
  });
};

const kue = (pembuatanKue) => {
  return new Promise((resolve) => {
    setTimeout(() => {
      const data = pembuatanKue.map((item) => {
        return item.split("-")[0] + "-kue";
      });
      resolve(data);
    }, 3000);
  });
};

const startPesanKue = (bahan) => {
  potongKue(bahan)
    .then((pembuatanKue) => {
      console.log("kue nya sudah selesai di masak " + pembuatanKue);
      return kue(pembuatanKue);
    })
    .then((pembuatanKue) => {
      console.log(pembuatanKue + " sudah siap silakan menikmati!");
      return kue(pembuatanKue);
    })
    .catch((err) => {
      console.log("start pembuatan kue");
    });
};

// startPesanKue(["nastar"]);
startPesanKue(["nastar", "bolu", "lapis"]);
