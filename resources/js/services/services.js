import axios from 'axios';

const getShowInfo = async (url,id) => {
    try {
        let result = {};
        const response = await axios.post(url,{
            params:id,
        });
        return result = response.data;
    } catch (error) {
        return error = {
            status:'500',
        };
    }
}
const getAll = async (url) => {
    try {
        let result = {};
        const response = await axios.get(url);
        return result = response.data;
    } catch (error) {
        return error = {
            status:'500',
        };
    }
}
const addNewInfo = async(url,obj) => {
    try {
        let result = [];
        const response = await axios.post(url,obj);
        result.push(response.data);
        return {
            status:true,
            result:result
        };
    }catch (error) {
        return {
            status: false,
            result: error.response.data.errors
        }
    }
}

export default {
    getShowInfo,
    addNewInfo,
    getAll
}