---
title: '2010: DIRTY BITS WORKSHOP'
date: 2001-12-31 10:59:00 -08:00
position: 2
---

# Douglas Goodwin, dgoodwin@calarts.edu
# Akademia der Bildenden Künst Wien, 12/2010

All media is marked by artifacts. Representation techniques pollute their subjects with noise, scratches, flares, hum, and many kinds of alterations. Generally, we look past these artifacts to see the subject beyond. Yet it is precisely these artifacts that place the media in time. We will identify the artifacts that give texture to digital media and develop strategies to produce those textures directly.

Digital media is supposed to be free from the artifacts that mark VHS, film, and vinyl. The purity of information is not supposed to impart a texture of its own. But we know digital media imparts artifacts on the media, they're just different than the old artifacts. Interesting things happen in the transcoding from A to D to A. We will investigate ways to reveal the materiality of media, to get to the dirty bits.

## DEMO_1: scratch the DVD
How can you get a scratched DVD to play? What happens to the media when you disturb the medium? How do you get the media out?

## DEMO_2: Stress the player
Media players are designed to handle a certain amount of bad information. They adjust the performance to cover up these stretches of bad road. How do they do that? What happens to the media?

## DEMO_3: Turn on the debugger
All the open-source tools have visual debugging tools. What do they look like? What can you do with them?

```
mplayer -lavdopts vismv=1 -vo x11 motion_vector_video.avi
```

## DEMO_4: Integrate the streams
Media players generally try to separate the streams of media (sound and picture for example). Interesting things can happen when you integrate them and then try to separate them again.

## DEMO_5: Low level hacks

### break the clock
The stability of the media depends on the consistency of the clock. What happens when you mess with the clock?

## DEMO_6: Interrupt the swarm
Free distribution of media enlists the forces of sophisticated distribution networks. What happens when you disrupt those streams or try to play the incomplete files? Use an AVI file.

## RESOURCES
>> Debugging telemetry
>> Nic Collins, Hacking the CD player