# Automatic Speech Recognition (ASR) Assisted Online Text Editor
Throughout its development this project has maintained one core goal: to bring state of the art ASR technology to the browser in a useful way. As I've progressed, three major iterations have been developed. Below are descriptions of the first two of these distinct versions, the third is currently being maintained and developed in a private repo for intellectual property protection.

## First Iteration - Streaming input audio to Watson API and dynamically displaying formatted results
All WAV files which are RIFF formatted can be uploaded to the web page, starting a process of slicing and dynamic WebSocket creation. Each stream sends 5 minutes of audio for processing, parses the JSON result, and outputs back to the browser.

## Second Iteration - 100% Proprietary Web Based Text Editor
Cleaned up code and operations of first iteration, and developed text editor from scratch to manipulate results from API call. For rapid editing entire words can be deleted with a single keystroke, and traversing the document can be done one character or one word at a time.

#### Please feel free to reach out to me at jnatale2@u.rochester.edu if you'd like to test out any iteration of this project. I currently have each iteration password protected to avoid any costly spamming (external API charges per minute).
