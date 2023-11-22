// auth.js (inside modules folder)
import axios from 'axios';
import router from '@/router'; // Import your router instance (adjust the import path)

const state = {
    token: null,
    user: null,
};

const mutations = {
    SET_TOKEN(state, token) {
        state.token = token;
    },
    SET_USER(state, user) {
        state.user = user;
    },
};

const actions = {
    setToken({ commit }, token) {
        commit('SET_TOKEN', token);
    },
    setUser({ commit }, user) {
        commit('SET_USER', user);
    },
    async checkTokenExpiration({ state }) {
        try {
            if (!state.token) {
                // If token doesn't exist, redirect to login page
                router.push('/login'); // Redirect to the login page
                return;
            } else {
                const response = await axios.get('/api/user', {
                    headers: { Authorization: `Bearer ${state.token}` },
                });
                const userData = response.data;
            }

        } catch (error) {
            console.error('Token expiration check failed:', error);
        }
    },
};

export default {
    namespaced: true,
    state,
    mutations,
    actions,
};
