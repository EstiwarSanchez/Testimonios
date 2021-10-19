
document.addEventListener('alpine:init', () => {
    getTestimonials();
    Alpine.data('app', () => ({
        data: JSON.parse(localStorage.getItem('testimonials')),
    }))
})

async function login() {
    return new Promise((resolve, reject) => {
        axios
            .post("api/v1/user/getToken", {
                email: "userapi@gmail.com",
                password: "x7z#L*@m2wLN",
            })
            .then(function (response) {
                var data = response.data;
                if (data.status) {
                    localStorage.setItem("token", data.data);
                    getTestimonials();
                }
                resolve(data);
            })
            .catch(function (error) {
                console.log(error);
                resolve(error);
            });
    });
}

async function getTestimonials() {
    axios.defaults.withCredentials = true;
    return new Promise((resolve, reject) => {
        axios({
            method: "post",
            url: "api/v1/testimonials",
            headers: {
                "Content-Type": "application/json",
                Authorization: "Bearer " + localStorage.getItem("token"),
            },
        })
            .then(function (response) {
                var data = response.data;
                localStorage.setItem('testimonials', JSON.stringify(data.data))
                resolve(data.data);
            })
            .catch((errors) => {
                if (errors.response.status === 401) {
                    localStorage.removeItem("token");
                    login();
                }
                reject(errors);
            });
    });
}
