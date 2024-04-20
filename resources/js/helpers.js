export async function runAjax(endpoint, method = 'GET', data = {}) {
  try {
    const token = localStorage.getItem('token')

    const requestData = {
      method: method,
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${token}`,
      },
    }

    if (method.toUpperCase() === 'GET' && Object.keys(data).length) {
      let queryString = Object.keys(queryParams).map(
        key => `${encodeURIComponent(key)}=${encodeURIComponent(queryParams[key])}`
      ).join('&')
      endpoint += `?${queryString}`
    }

    if (['POST', 'PUT'].indexOf(method.toUpperCase()) !== -1) {
      requestData.body = JSON.stringify(data)
    }

    const response = await fetch(endpoint, requestData)

    if (!response.ok) {
      throw await response.json()
    }

    return await response.json()

  } catch (error) {
    console.error('Run ajax failed:', error)
    throw error
  }
}
