import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    final List<String> entries = <String>['A', 'B', 'C'];
    final List<int> colorCodes = <int>[600, 500, 100];

    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar: AppBar(title: const Text('ListView.builder Example')),
        body: Padding(
          padding: const EdgeInsets.all(10.0),
          child: GridView.count(
            primary: false,
            padding: const EdgeInsets.all(20),
            crossAxisSpacing: 10,
            mainAxisSpacing: 10,
            crossAxisCount: 2,
            children: <Widget>[
              Container(
                padding: const EdgeInsets.all(8),
                child: const Text("Rise up, no one's gonna stop it"),
                color: const Color.fromARGB(255, 182, 7, 7),
              ),
              Container(
                padding: const EdgeInsets.all(8),
                child: const Text("We aimin' for the big time"),
                color: Color.fromARGB(255, 125, 51, 51),
              ),
              Container(
                padding: const EdgeInsets.all(8),
                child: const Text('Tokyo to worldwide, we pull up'),
                color: Color.fromARGB(255, 182, 7, 7),
              ),
              Container(
                padding: const EdgeInsets.all(8),
                child: const Text('Drive the whip in the kodak'),
                color: Color.fromARGB(255, 182, 7, 7),
              ),
              Container(
                padding: const EdgeInsets.all(8),
                child: const Text("This 'ballistik' you know that (hoo)"),
                color: Color.fromARGB(255, 121, 68, 68)
              ),
              Container(
                padding: const EdgeInsets.all(8),
                child: const Text("Top the feed 'cause we on that"),
                color: Color.fromARGB(255, 97, 41, 41),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
