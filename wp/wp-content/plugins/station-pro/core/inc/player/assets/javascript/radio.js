const getData = async() => {
    try {
        const response = await fetch("../assets/javascript/station_data.json");

        if (!response.ok) {
            throw new Error(res.status);
        }

        const data = await response.json();
        return data;
    } catch (error) {
        "error:", error.message;
    }
};

const radio = async() => {
    const data = await getData();
    const radio_url =
    data["shoutcast"] != "" ? data["shoutcast"] + "/;" : data["icecast"];
    const audioFiles = [
    {
        name: "test",
        url: radio_url,
        coverArt: data["radio_logo"]["url"],
    },
    {
        name: "Song 2",
        url: "",
        coverArt: "",
    },
    ];
    return { audioFiles, radio_url, data };
};

// const audioFiles = [{
//   name: 'Testing',
//   url: 'https://521dimensions.com/song/DuskToDawn-Emancipator.mp3',
//   coverArt: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/from-dusk-to-dawn.jpg',

// },
// {
//   name: "Song 2",
//   url: "https://521dimensions.com/song/DuskToDawn-Emancipator.mp3",
//   coverArt: "https://521dimensions.com/img/open-source/amplitudejs/album-art/from-dusk-to-dawn.jpg",
// },

// ];

const audioFiles = async() => {
    const station = await radio();

    return [
    {
        name: "Radio Test",
        url: station["radio_url"],
        coverArt: station["data"]["radio_logo"]["url"],
    },
    {
        name: "Song 2",
        url: "https://521dimensions.com/song/DuskToDawn-Emancipator.mp3",
        coverArt:
        "https://521dimensions.com/img/open-source/amplitudejs/album-art/from-dusk-to-dawn.jpg",
    },
    ];
};

const playerOptions = {
    songs: "",
    async fetchSongs() {
        const data = await audioFiles();
        this.songs = data;
        return this.songs;
    },
};

let openedWindow;

document.addEventListener("alpine:init", async() => {
    Alpine.data("app", () => ({
        async init() {
            const data_station = await radio();

            this.station_data = data_station["data"];
        },
        play: true,
        load: false,
        vol: 50,
        favorite: false,
        screen: true,
        copyright: "StationPro.co",
        station_data: "",
        popup: true,

        widget: {
            ["@click"]() {
                this.play = true;

                Amplitude.stop();
                this.screen = !this.screen;
                const openedWindow = window.open(
                    "widget.php",
                    "_blank",
                    "toolbar=no,menubar=no,scrollbars=no,resizable=no, top=300, left=500, width=460, height=420",
                    "widget"
                );

            },
        },

        closeWindow: {
            ["@click"]() {
                this.screen = !this.screen;
                openedWindow.close();
            },
        },

        main: {
            ["x-show"]() {
                this.toggle_marqueet = !this.toggle_marqueet;
            },
        },

        popup: {
            ["@click"]() {

                this.popup = !this.popup;

            }
        },

        navplayer: {
            ["@click"]() {
                const toggle = (this.play = !this.play);
                toggle === true ? Amplitude.play() : Amplitude.stop();
            },

            ["x-init"]() {
                this.play = true;
                Amplitude.play();
            },
        },

        playing: {
            ["@click"]() {
                const toggle = (this.play = !this.play);
                toggle === false ? Amplitude.play() : Amplitude.stop();
            },

            ["x-init"]() {
                this.play = false;
                window.addEventListener("message", (event) => {
                    Amplitude.play();
                });
            },
        },

        toggleFavorite: {
            ["@click"]() {
                this.favorite = !this.favorite;
            },
        },
        initializePlayer: async() => {
            const data = await audioFiles();

            Amplitude.init({
                songs: [{ name: "Song 2", url: data[0]["url"] }],

                callbacks: {
                    initialized: function () {},
                },
            });

        return Amplitude;
        },
    }));
});
