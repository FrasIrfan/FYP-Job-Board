import { useEffect } from 'react'
import { app } from './firebase'

import ReadJobs from './readfirestore'



function App() {
  useEffect(() => {
    if (app) {
      console.log('Firebase connected:', app)
    } else {
      console.log('Firebase not connected')
    }
  }, [])

  return (
    <div>
      <h1>Firebase Connection Test</h1>
      <p>Check the console for Firebase connection status.</p>
      <p>Data from Firestore.</p>
      <ReadJobs />
    </div>
  )
}

export default App
