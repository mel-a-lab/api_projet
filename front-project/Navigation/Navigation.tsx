import React from "react";
import { NavigationContainer } from "@react-navigation/native";
import Ionicons from "react-native-vector-icons/Ionicons";
import { createBottomTabNavigator } from "@react-navigation/bottom-tabs";
import HomeComponent from "./HomeComponent";
import SearchComponent from "./SearchComponent";
import UserComponent from "./UserComponent";

export default function Navigation() {
  const Tab = createBottomTabNavigator();

  return (
    <NavigationContainer>
      <Tab.Navigator
        initialRouteName="Home"
        screenOptions={({ route }) => ({
          tabBarIcon: ({ color, size }) => {
            if (route.name === "Home") {
              return <Ionicons name={"home"} />;
            } else if (route.name === "Search") {
              return <Ionicons name={"search"} />;
            } else {
              return <Ionicons name={"user"} />;
            }
          },
        })}
      >
        <Tab.Screen name="Home" component={HomeComponent} />
        <Tab.Screen name="Search" component={SearchComponent} />
        <Tab.Screen name="User" component={UserComponent} />
      </Tab.Navigator>
    </NavigationContainer>
  );
}
