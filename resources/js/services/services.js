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
export default {
    getShowInfo
}